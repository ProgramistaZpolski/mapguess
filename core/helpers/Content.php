<?php

namespace App\Core\Helpers;

class ContentType
{
	/* ContentTypes are from MDN */
	public static function json() {
		header('Content-Type: application/json');
	}

	public static function file($filename) {
		if(is_file($filename)) {
			return mime_content_type($filename);
		}
	}

	public static function xml() {
		header('Content-Type: application/xml');
	}

	public static function swf() {
		header('Content-Type: application/x-shockwave-flash');
	}

	public static function aac() {
		header('Content-Type: audio/aac');
	}

	public static function abw() {
		header('Content-Type: application/x-abiword');
	}

	public static function arc() {
		header('Content-Type: application/x-freearc');
	}

	public static function avi() {
		header('Content-Type: video/x-msvideo');
	}

	public static function azw() {
		header('Content-Type: application/vnd.amazon.ebook');
	}

	public static function bin() {
		header('Content-Type: application/octet-stream');
	}

	public static function bmp() {
		header('Content-Type: image/bmp');
	}

	public static function bz() {
		header('Content-Type: application/x-bzip');
	}

	public static function bz2() {
		header('Content-Type: application/x-bzip2');
	}

	public static function csh() {
		header('Content-Type: application/x-csh');
	}

	public static function css() {
		header('Content-Type: text/css');
	}

	public static function csv() {
		header('Content-Type: text/csv');
	}

	public static function doc() {
		header('Content-Type: application/msword');
	}

	public static function docx() {
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
	}

	public static function eot() {
		header('Content-Type: application/vnd.ms-fontobject');
	}

	public static function epub() {
		header('Content-Type: application/epub+zip');
	}

	public static function gz() {
		header('Content-Type: application/gzip');
	}

	public static function gif() {
		header('Content-Type: image/gif');
	}

	public static function html() {
		header('Content-Type: text/html');
	}

	public static function ico() {
		header('Content-Type: image/vnd.microsoft.icon');
	}

	public static function ics() {
		header('Content-Type: text/calendar');
	}

	public static function jar() {
		header('Content-Type: application/java-archive');
	}

	public static function jpeg() {
		header('Content-Type: image/jpeg');
	}

	public static function js() {
		header('Content-Type: text/javascript');
	}

	public static function jsonld() {
		header('Content-Type: application/ld+json');
	}

	public static function mid() {
		header('Content-Type: audio/midi');
	}

	public static function midi() {
		header('Content-Type: audio/x-midi');
	}

	public static function mjs() {
		header('Content-Type: text/javascript');
	}

	public static function mp3() {
		header('Content-Type: audio/mpeg');
	}

	public static function mpeg() {
		header('Content-Type: video/mpeg');
	}

	public static function mpkg() {
		header('Content-Type: application/vnd.apple.installer+xml');
	}

	public static function odp() {
		header('Content-Type: application/vnd.oasis.opendocument.presentation');
	}

	public static function ods() {
		header('Content-Type: application/vnd.oasis.opendocument.spreadsheet');
	}

	public static function odt() {
		header('Content-Type: application/vnd.oasis.opendocument.text');
	}

	public static function oga() {
		header('Content-Type: audio/ogg');
	}

	public static function ogv() {
		header('Content-Type: video/ogg');
	}

	public static function ogx() {
		header('Content-Type: application/ogg');
	}

	public static function opus() {
		header('Content-Type: audio/opus');
	}

	public static function otf() {
		header('Content-Type: font/otf');
	}

	public static function png() {
		header('Content-Type: image/png');
	}

	public static function pdf() {
		header('Content-Type: application/pdf');
	}

	public static function php() {
		header('Content-Type: application/x-httpd-php');
	}

	public static function ppt() {
		header('Content-Type: application/vnd.ms-powerpoint');
	}

	public static function pptx() {
		header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
	}

	public static function rar() {
		header('Content-Type: application/vnd.rar');
	}

	public static function rtf() {
		header('Content-Type: application/rtf');
	}

	public static function sh() {
		header('Content-Type: application/x-sh');
	}

	public static function svg() {
		header('Content-Type: image/svg+xml');
	}

	public static function tar() {
		header('Content-Type: application/x-tar');
	}

	public static function tiff() {
		header('Content-Type: image/tiff');
	}

	public static function ts() {
		header('Content-Type: video/mp2t');
	}

	public static function ttf() {
		header('Content-Type: font/ttf');
	}

	public static function txt() {
		header('Content-Type: text/plain');
	}

	public static function vsd() {
		header('Content-Type: application/vnd.visio');
	}

	public static function wav() {
		header('Content-Type: audio/wav');
	}

	public static function weba() {
		header('Content-Type: audio/webm');
	}

	public static function webm() {
		header('Content-Type: video/webm');
	}

	public static function webp() {
		header('Content-Type: image/webp');
	}

	public static function woff() {
		header('Content-Type: font/woff');
	}

	public static function woff2() {
		header('Content-Type: font/woff2');
	}

	public static function xhtml() {
		header('Content-Type: application/xhtml+xml');
	}

	public static function xls() {
		header('Content-Type: application/vnd.ms-excel');
	}

	public static function xlsx() {
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	}

	public static function xul() {
		header('Content-Type: application/vnd.mozilla.xul+xml');
	}

	public static function zip() {
		header('Content-Type: application/zip');
	}

	public static function dot3gp() {
		header('Content-Type: video/3gpp');
	}

	public static function dot3gp_noaudio() {
		header('Content-Type: audio/3gpp');
	}

	public static function dot3gp2() {
		header('Content-Type: video/3gpp2');
	}

	public static function dot3gp2_noaudio() {
		header('Content-Type: audio/3gpp2');
	}

	public static function dot7zip() {
		header('Content-Type: application/x-7z-compressed');
	}
}
