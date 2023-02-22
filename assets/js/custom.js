function showCertificate(imgSrc, field, by) {
    Swal.fire({
        title: field,
        text: `Certified by ${by}`,
        imageUrl: imgSrc,
        imageWidth: '70%',
        imageAlt: 'Certificate-Img',
    })
}

function test(title, desc) {
    const element = document.getElementById(desc);
    Swal.fire({
        title: `${title}`,
        html: element.innerHTML,
        confirmButtonText: "Ok",
    });
}