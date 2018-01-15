$(document).ready(function(){


	$('#comment_submit').submit(function(){


		alert('asd');


		$user_id =	document.getElementById("user_id").value;
		$video_id =	document.getElementById("video_id").value;
		$post =	document.getElementById("post").value;



$.ajax({
			url : '/cmnt',
			data : {user_id : $user_id,
				video_id : $video_id,
				post : $post},

			success : function(result)
			{

				alert($result);

			}




		});





	});
});