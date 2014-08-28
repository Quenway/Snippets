Removes $ from HTML form post, allows only number and decimal points. 
Has $ display in field but disappear when onfocus.

The javascript allows only number and decimal points:

<SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </SCRIPT>

The blank amount to pay field displays the $ until the field is active:

 <input type="num" name="charge_total" value="$" onfocus="this.value=''" onkeypress="return isNumberKey(event)" >