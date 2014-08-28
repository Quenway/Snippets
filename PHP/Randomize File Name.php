function randomizeFileName( $real_file_name ) {
               $name_parts = @explode( ".", $real_file_name );
               $ext = "";
               if ( count( $name_parts ) > 0 ) {
                       $ext = $name_parts[count( $name_parts ) - 1];
               }
               return substr(md5(uniqid(rand(),1)), -16) . "." . $ext;
}
