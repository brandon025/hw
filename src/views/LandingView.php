<?php
namespace pastechart\hw\views;

use pastechart\hw\views\View;
use pastechart\hw\configs\Config;
use pastechart\hw\views\elements\HeaderElement;

class LandingView extends View
{
	public $singleselectgenre;
	public $ratingdisplay;
	public $viewingdisplay;
	public $newestdisplay;
	public $headersdisplay;

	public function __construct()
	{
        // add table view here!
		$this->headersdisplay=new HeaderElement($this);
	}

	public function render($data)
	{
		$this->headersdisplay->render($data); ?>
		<body>
		<h1><?=$data['title']?></h1>
		<p> Share your data in charts!</p>
		<form method="get" action="index.php?c=LandingController&m=invoke">
		<input type="text" placeholder="<?=$data['placeholder']?>" name="chart_title" /> <br />
		<input type="submit" value="Share" name="gobutton" /></form>
        <br>
            <textarea placeholder="<?=$data['placeholder2']?>" rows="10" cols="80" name="comment" form="usrform"></textarea>



	<?php
        /* Save this for viewing the chart
        */
		?>
		</body>
		</html>
	<?php
	}
}



