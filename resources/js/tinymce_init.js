tinymce.init({
    selector: 'textarea.email_content',
    theme: 'silver',
    plugins: ['link', 'media', 'lists', 'table', 'image', 'file-manager'],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent inden | link unlink",
    filemanager_title: 'Email\'s Media',
    Flmngr: {
        apiKey: "FLMNFLMN", // default free key
        urlFileManager: "{{ URL::asset('/files/fileManager.php') }}", // demo server 'https://fm.flmngr.com/fileManager'
        urlFiles: "{{ URL::asset('/images/flmngr/files') }}" // demo file storage 'https://fm.flmngr.com/files'
    }
});