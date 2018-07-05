function CenturionCollectionHelperAdd(object) {
    var obj = object;
    var last_id = Number(obj.parentNode.parentNode.parentNode.getAttribute('last_id'))+1;
    obj.parentNode.parentNode.parentNode.getElementsByClassName('box-body')[0].insertAdjacentHTML('afterBegin', JsTemplater(obj.parentNode.parentNode.parentNode.getElementsByClassName('helper-collection-template')[0].innerHTML,{id: last_id}));
    obj.parentNode.parentNode.parentNode.setAttribute('last_id', last_id)
}
function CenturionCollectionHelperRemove(object) {
    var obj = object;
    obj.parentNode.parentNode.parentNode.remove();
}