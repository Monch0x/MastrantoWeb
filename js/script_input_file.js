const create = str => document.createElement(str);
const files = document.querySelectorAll('.control-file');
Array.from(files).forEach(
  f => {
    const label = create('label');
    const span_text = create('span');
    const span_name = create('span');
    const span_button = create('span');

    label.htmlFor = f.id;

    span_text.className = 'control-file-name';
    span_button.className = 'control-file-button';

    span_name.innerHTML = f.dataset.empty || 'Ning&uacute;n archivo seleccionado';
    span_button.innerHTML = f.dataset.button || 'Buscar';

    label.appendChild(span_text);
    label.appendChild(span_button);
    span_text.appendChild(span_name);

    f.parentNode.appendChild(label);

    span_name.style.width = (span_text.clientWidth - 20) +'px';

    f.addEventListener('change', e => {
      if(f.files.length == 0){
        span_name.innerHTML = f.dataset.empty || 'Ning&uacute;n archivo seleccionado';
      }else if(f.files.length > 1){
        span_name.innerHTML = f.files.length + ' archivos seleccionados.';
      }else{
        span_name.innerHTML = f.files[0].name;
      }
    });
  }
);