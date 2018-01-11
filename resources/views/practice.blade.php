
    <div class="container">
        <form action="{{ Route('upload.Img') }}" method="post" enctype="multipart/form-data">
            <label>Select image to upload:</label>
            <input type="file" name="profile" id="file">
            <input type="file" name="cover" id="file2">
            <input type="submit" value="Upload" name="submit">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
    </div>
