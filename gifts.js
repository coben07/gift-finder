function checkRadioBtn(elm) {
  for(i=0; i< elm.children.length; i++) {
    if (elm.childNodes[i].nodeName === "INPUT") {
        elm.childNodes[i].checked = true;
        break;
    }
  }
}
