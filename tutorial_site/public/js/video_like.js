$(document).ready(function(){


	$('#like_button').click(function(){



		$text =document.getElementById("like_button").innerHTML;


if ($text == "Like") 
{		$videoId =  $(this).val();


		$.ajax({
			url : '/like',
			data : {videoId : $videoId},

			success : function(result){
				document.getElementById("like").innerHTML = "Likes: " + result;
				 document.getElementById("like_button").innerHTML = "Unlike";



			}
		});
	}
else
{	
$videoId =  $(this).val();
		$.ajax({
			url : '/unlike',
			data : {videoId : $videoId},

			success : function(result){
				document.getElementById("like").innerHTML = "Likes: " + result;
				 document.getElementById("like_button").innerHTML = "Like";



			}
		});
}




	});
});