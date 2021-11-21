<?php
    function getParams(){
        return !empty( $_GET ) ? $_GET : [];
    }
    function buildQuery( $params=array() ){
        $tmp=array();
        foreach( $params as $param => $value ){
            if( is_array( $value ) ){
                foreach( $value as $field => $fieldvalue )$tmp[]=sprintf('%s[]=%s',$param,$fieldvalue);
            } else $tmp[]=sprintf('%s=%s',$param,$value);
        }
        return urldecode( implode( '&', $tmp ) );
    }

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title>Filtering & maintaining checkbox "checked" status</title>
        <style>
            fieldset{
                margin:1rem;
                padding:1rem;
                border:1px dotted gray;
            }
            #paging > a{
                padding:0.25rem;
                border:1px solid transparent;
            }
            #paging > a.active{
                border:1px solid red;
                background:yellow;
            }
        </style>
    </head>
    <body>
        <form method='get'>
            <fieldset>
                <?php
                    # an array of brands.. this could likely be from the database
                    $brands=['iPhone','iPad','Samsung','Huawei','Nokia','Sony','LG','Motorola','Blackberry','Vodafone','Alcatel','Razer','Google'];

                    # get either the current GET array or an empty array
                    $params=getParams();

                    # add the brands checkboxes
                    foreach( $brands as $brand ){
                        # maintain the checked status by checking if the current brand is in the `brand[]` querystring value
                        $checked=isset( $_GET['brand'] ) && in_array( $brand, $_GET['brand'] ) ? ' checked' : '';
                        
                        # print the checkbox
                        printf('<input type="checkbox" name="brand[]" value="%1$s"%2$s>%1$s<br />', $brand, $checked );
                    }
                ?>
                <!-- a hidden field will ensure the page variable is set each time the form is submitted -->
                <input type='hidden' name='page' value='<?=isset( $_GET['page'] ) ? $_GET['page'] : 1;?>' />
                <input type='submit' />
            </fieldset>
            <fieldset id='paging'>
            <?php
                
                # some pseudo paging links... should be derived dynamically ~ this is just for demo
                for( $i=1; $i <= 10; $i++ ){

                    $params['page']=$i;
                    printf('<a href="?%2$s"> %1$d </a>', $i, buildQuery( $params ));
                }           
            ?>
            </fieldset>
        </form>
    </body>
</html>