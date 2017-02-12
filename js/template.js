function deletePost(post_id) {
  bootbox.confirm("Are you sure?", function(result) {
  if (result) {
    document.location.href="{!! route('delete_post', post_id); !!}";
  }
}