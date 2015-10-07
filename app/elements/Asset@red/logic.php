<?php

class AssetElement extends DesmondElement {

	public function getAssetPath() {

		return Application::Path('web');
	}
	public function js($file) {

		$root = $this->getAssetPath();

		echo "<script src='$root/assets/$file' type='text/javascript'></script>";
	}

	public function css($file) {

		$root = $this->getAssetPath();

		echo "<link href='$root/assets/$file' rel='stylesheet'>";
	}

	public function img($file, $alt='image') {

		$root = $this->getAssetPath();

		echo "<img src='$root/assets/$file' alt='$alt' />";
	}
}

?>
