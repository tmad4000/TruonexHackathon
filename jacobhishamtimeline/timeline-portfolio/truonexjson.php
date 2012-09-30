
{
    "timeline":
    {
        "headline":"Johnny B Goode",
        "type":"default",
		"startDate":"2009,1",
		"text":"<i><span class='c1'>Designer</span> & <span class='c2'>Developer</span></i>",
		"asset":
        {
            "media":"assets/img/notes.png",
            "credit":"<a href='http://dribbble.com/shots/221641-iOS-Icon'>iOS Icon by Asher</a>",
            "caption":""
        },
        "date": 
        <?php
		 $count=0;
		function mysql_fetch_array_FAKE($r,$t) {
			
			global $count;
			$count++;
			if($count < 10)
				return array(
					'date'=>"200{$count},{$count}",
					'projectTitle'=>'Sun and Moon',
					'projectDesc'=>'Sometimes when the sky is clear and the sunshine is not very strong, we can see the sun and the moon appearing together at the same time in the sky. Ancient Chinese poets have written many love stories using the co-appearance of the sun and the moon as a metaphor. Today, with a little bit of technology trick, we can easily recreate this phenomenon and surprises our grandparents. And the trick is called Matlab.',
					'projectMediaURL'=>'http://truonex-images.s3.amazonaws.com/uploads/picture/picture_file/92/best_RGB04.png'
					);
			else
				return false;
		}
		$date=array();
		
		while ($row = mysql_fetch_array_FAKE(2, 2)) {
			array_push($date,
						array(
							"startDate"=>$row['date'],
							"headline"=>$row['projectTitle'],
							"text"=>$row['projectDesc'],
							"asset"=>
							array(
								"media"=>$row['projectMediaURL'],
								"credit"=>"",
								"caption"=>""
							)
						)
					);
		}
		echo json_encode($date);

	?>
    
        
    }
}