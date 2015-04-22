$(function() {
    //calendar
    if($('.default-date-picker').datepicker != undefined)
    {
        $('.default-date-picker').datepicker({
            format: 'yyyy-mm-dd'
        });
    }

    //tags
    if(typeof(TagsField) != "undefined")
    {
        if($('#'+TagsField).tagsInput != undefined)
        {
            $('#'+TagsField).tagsInput({
                width: 'auto',
                onChange: function(elem, elem_tags)
                {
                    var languages = [];
                    $('.tag', elem_tags).each(function()
                    {
                        if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
                            $(this).css('background-color', 'yellow');
                    });
                }
            });

            // Uncomment this line to see the callback functions in action
            //			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

            // Uncomment this line to see an input with no interface for adding new tags.
            //			$('input.tags').tagsInput({interactive:false});
        }
    }

   
});

//tag input
function onAddTag(tag) {
    alert("Added a tag: " + tag);
}
function onRemoveTag(tag) {
    alert("Removed a tag: " + tag);
}

function onChangeTag(input,tag) {
    alert("Changed a tag: " + tag);
}