function displayFileName(inputElement) {
    const uploadLabel = inputElement.previousElementSibling;

    if (inputElement.files.length > 0) {
        const fileName = inputElement.files[0].name;
        uploadLabel.innerHTML = `<i class="bi bi-plus-circle-fill ps-2 me-3"></i>${fileName}`;
    } else {
        uploadLabel.innerHTML =
            '<i class="bi bi-plus-circle-fill ps-2 me-3"></i>Upload Bukti';
    }
}
