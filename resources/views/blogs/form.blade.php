<div class="form-group">
    <label for="seo_title">SEO Title</label>
    <input id="seo_title" type="text" class="form-control" name="seo_title" value="{{ old('seo_title') ?? $blog->seo_title }}">
    <div>{{ $errors->first('seo_title') }}</div>
</div>

<div class="form-group">
    <label for="seo_description">SEO Description</label>
    <input id="seo_description" type="text" class="form-control" name="seo_description" value="{{ old('seo_description') ?? $blog->seo_description }}">
    <div>{{ $errors->first('seo_description') }}</div>
</div>

<div class="form-group">
    <label for="blog_title">Blog Title</label>
    <input id="blog_title" type="text" class="form-control" name="blog_title" value="{{ old('blog_title') ?? $blog->blog_title }}">
    <div>{{ $errors->first('blog_title') }}</div>
</div>

<div class="form-group">
    <label for="blog_content">Blog Content</label>
    <textarea name="blog_content" cols="30" rows="10" class="form-control" id="mytextarea">{{ old('blog_content') ?? $blog->blog_content }}</textarea>
    <div>{{ $errors->first('blog_content') }}</div>
</div>


<div class="form-group">
    <label for="blog_date">Publish Date</label>
    <input type="date" class="form-control" name="blog_date" value="{{ old('blog_date') ?? $blog->blog_date ? $blog->blog_date->format('Y-m-d') : '' }}" required>
</div>

<div class="form-group">
    <label for="blog_image">Blog Image</label>
    <input type="file" class="form-control-file" name="blog_image">
    <div>{{ $errors->first('blog_image') }}</div>
</div>

<div class="form-group">
    <label for="seo_image_name">Edit Image Name</label>
    <input id="seo_image_name" type="text" class="form-control" name="seo_image_name" value="{{ old('seo_image_name') ?? ($blog->blog_image ? basename($blog->blog_image) : '') }}">
    <div>{{ $errors->first('seo_image_name') }}</div>
    <small class="form-text text-muted">If you're uploading a new image, this name will be replaced.</small>
</div>

@csrf
