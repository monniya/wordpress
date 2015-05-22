<script type="text/javascript" language="javascript">
/* <![CDATA[ */
    function grin(tag) {
    	var myField;
    	tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
    		myField = document.getElementById('comment');
    	} else {
    		return false;
    	}
    	if (document.selection) {
    		myField.focus();
    		sel = document.selection.createRange();
    		sel.text = tag;
    		myField.focus();
    	}
    	else if (myField.selectionStart || myField.selectionStart == '0') {
    		var startPos = myField.selectionStart;
    		var endPos = myField.selectionEnd;
    		var cursorPos = endPos;
    		myField.value = myField.value.substring(0, startPos)
    					  + tag
    					  + myField.value.substring(endPos, myField.value.length);
    		cursorPos += tag.length;
    		myField.focus();
    		myField.selectionStart = cursorPos;
    		myField.selectionEnd = cursorPos;
    	}
    	else {
    		myField.value += tag;
    		myField.focus();
    	}
    }
/* ]]> */
</script>
<a href="javascript:grin(':?:')"><img src="/wp-includes/images/smilies/icon_question.png" alt="" /></a>
<a href="javascript:grin(':razz:')"><img src="/wp-includes/images/smilies/icon_razz.png" alt="" /></a>
<a href="javascript:grin(':sad:')"><img src="/wp-includes/images/smilies/icon_sad.png" alt="" /></a>
<a href="javascript:grin(':evil:')"><img src="/wp-includes/images/smilies/icon_evil.png" alt="" /></a>
<a href="javascript:grin(':!:')"><img src="/wp-includes/images/smilies/icon_exclaim.png" alt="" /></a>
<a href="javascript:grin(':smile:')"><img src="/wp-includes/images/smilies/icon_smile.png" alt="" /></a>
<a href="javascript:grin(':oops:')"><img src="/wp-includes/images/smilies/icon_redface.png" alt="" /></a>
<a href="javascript:grin(':grin:')"><img src="/wp-includes/images/smilies/icon_biggrin.png" alt="" /></a>
<a href="javascript:grin(':eek:')"><img src="/wp-includes/images/smilies/icon_surprised.png" alt="" /></a>
<a href="javascript:grin(':shock:')"><img src="/wp-includes/images/smilies/icon_eek.png" alt="" /></a>
<a href="javascript:grin(':???:')"><img src="/wp-includes/images/smilies/icon_confused.png" alt="" /></a>
<a href="javascript:grin(':cool:')"><img src="/wp-includes/images/smilies/icon_cool.png" alt="" /></a>
<a href="javascript:grin(':lol:')"><img src="/wp-includes/images/smilies/icon_lol.png" alt="" /></a>
<a href="javascript:grin(':mad:')"><img src="/wp-includes/images/smilies/icon_mad.png" alt="" /></a>
<a href="javascript:grin(':twisted:')"><img src="/wp-includes/images/smilies/icon_twisted.png" alt="" /></a>
<a href="javascript:grin(':roll:')"><img src="/wp-includes/images/smilies/icon_rolleyes.png" alt="" /></a>
<a href="javascript:grin(':wink:')"><img src="/wp-includes/images/smilies/icon_wink.png" alt="" /></a>
<a href="javascript:grin(':idea:')"><img src="/wp-includes/images/smilies/icon_idea.png" alt="" /></a>
<a href="javascript:grin(':arrow:')"><img src="/wp-includes/images/smilies/icon_arrow.png" alt="" /></a>
<a href="javascript:grin(':neutral:')"><img src="/wp-includes/images/smilies/icon_neutral.png" alt="" /></a>
<a href="javascript:grin(':cry:')"><img src="/wp-includes/images/smilies/icon_cry.png" alt="" /></a>
<a href="javascript:grin(':mrgreen:')"><img src="/wp-includes/images/smilies/icon_mrgreen.png" alt="" /></a>
<br />
