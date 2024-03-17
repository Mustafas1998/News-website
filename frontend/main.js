$(document).ready(function(){
    function display() {
      $.ajax({
        url: 'display.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          $('#newsList').empty();
          $.each(response, function(index, news) {
            $('#newsList').append('<li class="list-group-item"><h3>' + news.news_title + '</h3><p>' + news.news_content + '</p></li>');
          });
        }
        });
    }
  
  display();

  $('#addNewsForm').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: 'add form.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log(response); 
          display();
          $('#title').val('');
          $('#content').val('');
        }
      });
    });
  })