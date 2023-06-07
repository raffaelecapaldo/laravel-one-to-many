import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

if (document.querySelector( '#editor' ) !== null) {
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
}

const deleteButton = document.querySelectorAll('.delete-button');//seleziona tasti per cancellare tramite classe

deleteButton.forEach((button) => {//a tutti i tasti aggiungi eventlistener con funzione anonima
    button.addEventListener('click', (event) => {
        event.preventDefault();//previeni evento form

        const dataTitle = button.getAttribute('data-item-name');//prendi dal bottone specifico l'attributo data-item-title
        const dataType = button.getAttribute('data-item-type');

        const modal = document.getElementById('deleteModal');//seleziona modale

        const bootstrapModal = new bootstrap.Modal(modal);//istanzia modale (guida boostrap)
        bootstrapModal.show();//mostrala

        const modalItemTitle = modal.querySelector('#modal-item-title');
        const modalItemTitleType = modal.querySelector('#modal-item-titletype')//seleziona titolo modale
        modalItemTitle.textContent = dataTitle;//assegnagli contenuto di data-item-title

        if (dataType == "project") {
            modalItemTitleType.textContent = 'il progetto';
        }
        else {
        modalItemTitleType.textContent = 'la categoria';

        }

        const buttonDelete = modal.querySelector('button.btn-primary');//seleziona bottone conferma modale

        buttonDelete.addEventListener('click', () => {//al click scatena evento del form
            button.parentElement.submit();
        });
    });
});

const addButton = document.querySelector('.add-button')
addButton.addEventListener('click', function() {
    const addModal = document.getElementById('AddModal');
    const bootstrapAddModal = new bootstrap.Modal(addModal);
    bootstrapAddModal.show();
})
