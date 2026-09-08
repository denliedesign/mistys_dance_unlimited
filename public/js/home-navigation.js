document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('video[data-poster]');
    const loadPoster = (video) => {
        video.poster = video.dataset.poster;
        delete video.dataset.poster;
    };
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    loadPoster(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '300px' });
        videos.forEach((video) => observer.observe(video));
    } else videos.forEach(loadPoster);

    const button = document.querySelector('.menu-icon');
    const navigation = document.querySelector('.full-screen-nav');
    if (!button || !navigation) return;
    const icon = button.querySelector('ion-icon');
    const setOpen = (open) => {
        navigation.classList.toggle('is-open', open);
        button.setAttribute('aria-expanded', String(open));
        button.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
        if (icon) icon.setAttribute('name', open ? 'close-outline' : 'menu-outline');
    };
    button.addEventListener('click', () => setOpen(button.getAttribute('aria-expanded') !== 'true'));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && button.getAttribute('aria-expanded') === 'true') {
            setOpen(false);
            button.focus();
        }
    });
    navigation.addEventListener('click', (event) => {
        if (event.target.closest('a')) setOpen(false);
    });
});
