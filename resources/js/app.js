import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

toastr.options.closeButton = true;
toastr.options.progressBar = true;
toastr.options.newestOnTop = true;

Livewire.on("alert", (data) => {
    const type = data[0];
    const message = data[1];

    if (type === "success") {
        toastr.success(message);
    }

    if (type === "error") {
        toastr.error(message);
    }
});

Livewire.on("swal", (data) => {
    let title = data[0];
    let text = data[1];
    let type = data[2];
    let timer = 2000;
    let confirmButtonText = 'Tutup';
    if (data[3]) {
        confirmButtonText = data[3];
    }
    let cssConfirmButton = 'btn btn-danger';
    if (type === 'success') {
        cssConfirmButton = 'btn btn-success';
    }
    if (type === 'error') {
        timer = undefined;
    }
    if (data[4]) {
        Swal.fire({
            title: title,
            html: text,
            timer: timer,
            type: type,
            icon: type,
            buttonStyling: false,
            confirmButtonText: confirmButtonText,
            customClass: {
                confirmButton: cssConfirmButton
            }
        });
        return;
    }
    Swal.fire({
        title: title,
        text: text,
        timer: timer,
        icon: type,
        buttonsStyling: false,
        confirmButtonText: confirmButtonText,
        customClass: {
            confirmButton: cssConfirmButton
        }
    });
});

let modalsElement = document.getElementById("laravel-livewire-modals");

$(modalsElement).on("hidden.bs.modal", () => {
    Livewire.emit("resetModal");
});

Livewire.on("showBootstrapModal", () => {
    $(modalsElement).modal("show");
});

Livewire.on("hideModal", () => {
    $(modalsElement).modal("hide");
});

tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ]
  });
