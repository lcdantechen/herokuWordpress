jQuery(document).ready( function($) {

	 $('#addHero').on('click', function(){
    console.log('button is clicked')

    
    var heroNew = $('#hero-input').val();

    console.log(heroNew);
    /*
     superheroes.push(heroNew);
     console.log(superheroes);
     renderButtons();*/
   
  
        var queryURL = "https://api.giphy.com/v1/gifs/search?q=" + heroNew + "&api_key=dc6zaTOxFJmzC&limit=10";

       $.ajax({
                url: queryURL,
                method: 'GET'
            })
            .done(function(response) {
              
                console.log(response)

                var results = response.data;

                for (var i = 0; i < 10; i++) {
                    console.log(results[i]);

                    var heroDiv = $('<div>');
                    var p = $('<p>')
                    p.text('rating' + results[i].rating);
                    // have to look the inspector to know the AIP element
                    console.log(results[i].rating);
                    var heroImage = $('<img>');
                    heroImage.attr('src', results[i].images.fixed_height.url);
                    heroDiv.append(p);
                    heroDiv.append(heroImage);
                    $('#gifs').prepend(heroDiv);
                }
           })


    return false;
   
  })

})