// Uppercase every first letter of a word
jQuery.fn.ucwords = function() {
    return this.each(function(){
        var val = $(this).text(), newVal = '';
        val = val.split(' ');
        for(var c=0; c < val.length; c++) {
            newVal += val[c].substring(0,1).toUpperCase() + val[c].substring(1,val[c].length).toLowerCase() + (c+1==val.length ? '' : ' ');
        }
        $(this).text(newVal);
    });
}