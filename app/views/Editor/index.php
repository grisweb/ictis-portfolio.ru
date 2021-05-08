<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<link rel="stylesheet" href="styles/content-styles.css" type="text/css">
<section class="page-main__section">
    <form action="" method="post">
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <p><input type="submit" value="Submit"></p>
    </form>
</section>
<script>
    ClassicEditor.create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>