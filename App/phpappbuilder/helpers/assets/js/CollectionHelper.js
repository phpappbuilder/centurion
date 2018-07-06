function CenturionCollectionHelperAdd(object) {
    var obj = object;
    var last_id = Number(obj.parentNode.parentNode.parentNode.getAttribute('last_id'))+1;
    console.log(obj.parentNode.parentNode.parentNode.children);
    obj.parentNode.parentNode.parentNode.getElementsByClassName('box-body')[0].insertAdjacentHTML('afterBegin', JsTemplater(obj.parentNode.parentNode.parentNode.children[3].innerHTML,{id: last_id}));
    obj.parentNode.parentNode.parentNode.setAttribute('last_id', last_id)
}
function CenturionCollectionHelperRemove(object) {
    var obj = object;
    obj.parentNode.parentNode.parentNode.remove();
}