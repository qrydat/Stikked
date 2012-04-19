<?php
/**
 * Class and Function List:
 * Function list:
 * Classes list:
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

//codemirror languages
$config['codemirror_languages'] = array(
	'html4strict' => array(
		'mode' => 'htmlmixed',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
			array(
				'codemirror/mode/css/css.js'
			) ,
			array(
				'codemirror/mode/htmlmixed/htmlmixed.js'
			) ,
		) ,
	) ,
	'css' => array(
		'mode' => 'css',
		'js' => array(
			array(
				'codemirror/mode/css/css.js'
			) ,
		) ,
	) ,
	'javascript' => array(
		'mode' => 'javascript',
		'js' => array(
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
		) ,
	) ,
	'php' => array(
		'mode' => 'php',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
			array(
				'codemirror/mode/css/css.js'
			) ,
			array(
				'codemirror/mode/clike/clike.js'
			) ,
			array(
				'codemirror/mode/php/php.js'
			) ,
		) ,
	) ,
	'python' => array(
		'mode' => 'python',
		'js' => array(
			array(
				'codemirror/mode/python/python.js'
			) ,
		) ,
	) ,
	'ruby' => array(
		'mode' => 'ruby',
		'js' => array(
			array(
				'codemirror/mode/ruby/ruby.js'
			) ,
		) ,
	) ,
	'bash' => 'Bash',
	'c' => array(
		'mode' => 'text/x-csrc',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'cpp' => array(
		'mode' => 'text/x-c++src',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'diff' => 'Diff',
	'latex' => 'LaTeX',
	'sql' => 'SQL',
	'xml' => 'XML',
	'text' => 'Plain Text',
	'abap' => 'ABAP',
	'actionscript' => 'Actionscript',
	'ada' => 'ADA',
	'apache' => 'Apache Log',
	'applescript' => 'AppleScript',
	'asm' => 'Assembler',
	'asp' => 'ASP',
	'autoit' => 'AutoIt',
	'blitzbasic' => 'Blitzbasic',
	'bnf' => 'Backus-Naur-Form',
	'c_mac' => 'C for Macs',
	'caddcl' => 'CAD DCL',
	'cadlisp' => 'CAD Lisp',
	'cfdg' => 'CFDG',
	'cfm' => 'CFM',
	'cpp-qt' => 'C++ QT',
	'csharp' => array(
		'mode' => 'text/x-csharp',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'd' => 'D',
	'delphi' => 'Delphi',
	'div' => 'DIV',
	'dos' => 'DOS',
	'dot' => 'dot',
	'eiffel' => 'Eiffel',
	'fortran' => 'Fortran',
	'freebasic' => 'FreeBasic',
	'genero' => 'Genero',
	'gml' => 'GML',
	'groovy' => 'Groovy',
	'haskell' => 'Haskell',
	'idl' => 'Unoidl',
	'ini' => 'INI',
	'inno' => 'Inno Script',
	'io' => 'Io',
	'java' => array(
		'mode' => 'text/x-java',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'java5' => array(
		'mode' => 'text/x-java',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'lisp' => 'Lisp',
	'lua' => array(
		'mode' => 'lua',
		'js' => array(
			array(
				'codemirror/mode/lua/lua.js'
			) ,
		) ,
	) ,
	'm68k' => 'm68k',
	'matlab' => 'Matlab',
	'mirc' => 'mIRC',
	'mpasm' => 'MPASM',
	'mysql' => 'MySQL',
	'nsis' => 'NSIS',
	'objc' => 'Objective C',
	'ocaml' => 'ocaml',
	'oobas' => 'OpenOffice.org Basic',
	'oracle8' => 'Orcale 8 SQL',
	'pascal' => 'Pascal',
	'per' => 'Per',
	'perl' => 'Perl',
	'plsql' => 'PL/SQL',
	'qbasic' => 'QBasic',
	'rails' => 'Rails',
	'reg' => 'Registry',
	'robots' => 'robots.txt',
	'sas' => 'SAS',
	'scheme' => 'Scheme',
	'sdlbasic' => 'sdlBasic',
	'smalltalk' => 'Smalltalk',
	'smarty' => 'Smarty',
	'tcl' => 'TCL',
	'thinbasic' => 'thinBasic',
	'tsql' => 'T-SQL',
	'vb' => 'Visual Basic',
	'vbnet' => 'VB.NET',
	'vhdl' => 'VHDL',
	'visualfoxpro' => 'Visual FoxPro',
	'winbatch' => 'WinBatch',
	'xpp' => 'X++',
	'z80' => 'Z80',
);
