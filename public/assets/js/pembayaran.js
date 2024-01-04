var data = [
    {
        text: "Bank Options",
        children: [
            {
                value: "bca",
                id: 1,
                selected: false,
                text: "Bank BCA",
                image: "/assets/img/pembayaran/bca.png",
            },
            {
                value: "bri",
                id: 2,
                selected: false,
                text: "Bank Briva",
                image: "/assets/img/pembayaran/briva.png",
            },
            {
                value: "bni",
                id: 3,
                selected: false,
                text: "Bank BNI",
                image: "/assets/img/pembayaran/bni.png",
            },
            {
                value: "permata",
                id: 4,
                selected: false,
                text: "Bank Permata",
                image: "/assets/img/pembayaran/permata.png",
            },
            {
                value: "mandiri",
                id: 5,
                selected: false,
                text: "Bank Mandiri",
                image: "/assets/img/pembayaran/mandiri.png",
            },
            {
                value: "cimb",
                id: 6,
                selected: false,
                text: "CIMB NIAGA",
                image: "/assets/img/pembayaran/cimbniaga.png",
            },
        ],
    },
    {
        text: "E-Wallets",
        children: [
            {
                value: "gopay",
                id: 7,
                selected: false,
                text: "Gopay",
                image: "/assets/img/pembayaran/gopay.svg",
            },
            {
                value: "qris",
                id: 8,
                selected: false,
                text: "QRIS",
                image: "/assets/img/pembayaran/qris.svg",
            },
            {
                value: "shopeepay",
                id: 9,
                selected: false,
                text: "Shopee Pay",
                image: "/assets/img/pembayaran/shoopepay.svg",
            },
        ],
    },
    {
        text: "Counter",
        children: [
            {
                value: "indomaret",
                id: 10,
                selected: false,
                text: "Indomaret",
                image: "/assets/img/pembayaran/indomaret.svg",
            },
            {
                value: "alfamart",
                id: 11,
                selected: false,
                text: "Alfamart",
                image: "/assets/img/pembayaran/alfamart.svg",
            },
        ],
    },
];

$(document).ready(function () {
    $("#myDropdown").select2({
        data: data,
        indexedDB: 4,
        selectOnClose: true,
        templateResult: formatOption,
        templateSelection: formatOption,
    });
});

function formatOption(option) {
    if (!option.id) {
        return option.text;
    }

    var imageSrc = option.image
        ? '<img class="option-image" src="' + option.image + '" />'
        : "";
    var $option = $(
        '<span class="option-container d-flex row ">' +
            imageSrc +
            '<span class="option-text col-md-7 fw-bold"  id="channel-bayar-' +
            option.id +
            '" >' +
            option.text +
            "</span></span>"
    );

    return $option;
}

// function target(e) {
//     const eX = document.querySelector("option ");
//     console.log(eX);
// }
