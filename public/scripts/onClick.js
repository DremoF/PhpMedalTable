function deleteId(url)
{
  $.ajax({
    url: url,
      method: 'get',
      success: function(){
          location.href=location.href;
    }
  })
}