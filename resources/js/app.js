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

        const modal = document.getElementById('deleteModal');//seleziona modale

        const bootstrapModal = new bootstrap.Modal(modal);//istanzia modale (guida boostrap)
        bootstrapModal.show();//mostrala

        const modalItemTitle = modal.querySelector('#modal-item-title');//seleziona titolo modale
        modalItemTitle.textContent = dataTitle;//assegnagli contenuto di data-item-title

        const buttonDelete = modal.querySelector('button.btn-primary');//seleziona bottone conferma modale

        buttonDelete.addEventListener('click', () => {//al click scatena evento del form
            button.parentElement.submit();
        });
    });
});
