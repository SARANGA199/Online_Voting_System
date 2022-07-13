function deleteCandidate(event) {
    const candidateID = event.target.id;
    console.log(candidateID);
    if (confirm('Are you sure you want to delete this candidate')) {
        jQuery.ajax({
            type: "GET",
            url: '../helpers/data.php',
            data: {functionname: 'deleteCandidate', arguments: [1, 2]},
            success: function (obj, textstatus) {
                console.log(obj);
                console.log(textstatus);
            }
        });
    }
}
