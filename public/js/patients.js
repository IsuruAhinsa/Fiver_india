/**
 * patients.index
 * Author: Noman
 */

function selectfilterpatient(pid) {
    document.location = 'manage/' + pid;
}

function deletePatient(firstname, lastname) {
    if (window.confirm('Are you sure you want to delete all data for ' + firstname + ' ' + lastname + '?')) {

        if (window.confirm('Please confirm: this will delete all visits and associated data for ' + firstname + ' ' + lastname + '!')) {

        } else {
            event.preventDefault();
        }

    } else {

        event.preventDefault();

    }
}
