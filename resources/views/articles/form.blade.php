
<div class="form-group">
    <label for="newsTitle">"MDU (Month) (Year)"</label>
    <input id="newsTitle" type="text" class="form-control" name="newsTitle" value="{{ old('newsTitle') ?? $article->newsTitle }}">
    <div>{{ $errors->first('newsTitle') }}</div>
</div>

<div class="form-group">
    <label for="articleTitle">Article Title</label>
    <input id="articleTitle" type="text" class="form-control" name="articleTitle" value="{{ old('articleTitle') ?? $article->articleTitle }}">
    <div>{{ $errors->first('articleTitle') }}</div>
</div>

<div class="form-group">
    <label for="articleContent">Article Content</label>
    <textarea name="articleContent" cols="30" rows="10" class="form-control articletext" id="article-textarea">{{ old('articleContent') ?? $article->articleContent }}</textarea>
    <div>{{ $errors->first('articleContent') }}</div>
</div>

<div class="form-group">
    <label for="newsImage">News Image</label>
    <input type="file" class="form-control-file" name="newsImage">
    <div>{{ $errors->first('newsImage') }}</div>
</div>


@csrf
