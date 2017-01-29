<?php
    
    require_once "pclass.class.php";
    
    use PCM\Structures\PClass;
    use PCM\Structures\PVar;
    use PCM\Structures\PMethod;
    use PCM\Structures\PConst;
    
    $class = new PClass(_NATIVE_, "THIS IS CLASS");
    
    $method = new PMethod(_PRIVATE_, "my", ['a', 'b', 'c']);
    $var = new PVar(_PROTECTED_, "vars");
    $const = new PConst("Con", "12");
    
    $class->addVars([$var]);
    $class->addConsts([$const]);
    
    
    if (!empty($_POST['send'])) {
        $code = $_POST['src'];
        
        $method->setSrc($code);
        $class->addMethods([$method]);
        file_put_contents("test.src", $class);
    }
    
    
?>
<form name="code" method="POST">
    <textarea name="src" cols="150" rows="10" onkeydown="insertTab(this, event);"></textarea>
    <input name="send" type="submit">
</form>
<script type="text/javascript">
    function insertTab(o, e)
    {
        var kC = e.keyCode ? e.keyCode : e.charCode ? e.charCode : e.which;
        if (kC == 9 && !e.shiftKey && !e.ctrlKey && !e.altKey)
        {
            var oS = o.scrollTop;
            if (o.setSelectionRange)
            {
                var sS = o.selectionStart;
                var sE = o.selectionEnd;
                o.value = o.value.substring(0, sS) + "\t" + o.value.substr(sE);
                o.setSelectionRange(sS + 1, sS + 1);
                o.focus();
            }
            else if (o.createTextRange)
            {
                document.selection.createRange().text = "\t";
                e.returnValue = false;
            }
            o.scrollTop = oS;
            if (e.preventDefault)
            {
                e.preventDefault();
            }
            return false;
        }
        return true;
    }
</script>
<!--
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>-->