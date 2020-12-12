<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	        $content = @file_get_contents( 'translation.json' );
        if ( $content !== FALSE ) {
            $lng = json_decode( $content, TRUE );
			
            global $lang_list;
            foreach ( $lng[ "language" ] as $key => $value ) {
                $code = $value[ "code" ];
				echo $code." ";
                $lang_list[ $code ] = $value[ "name" ];
				echo $lang_list[ $code ]." ";
                if ( 1 )
                    $value[ "translation" ];
				
            }
            
        }
	?>
	
</body>
</html>