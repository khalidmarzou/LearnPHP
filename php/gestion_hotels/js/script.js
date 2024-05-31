function deleteH(id){
    confirmation = confirm('Are You Sure ??');
    if (confirmation) {
        window.location.href = `/controllers/deleteH.php?id_hotel=${id}`;
    }
}