class Project {

    /**
     * Mengambil nama dosen dari database berdasarkan
     * nama yang di inputkan oleh user
     * setelah itu set value input sesuai dengan nama yang dipilih user
     * 
     */
    ShowListDosen(){
        console.log("start")
        // mengambil tag input nama dosen
        const nama = document.querySelector("#nama-dosen")

        // mengambil komponent list dosen
        const dosen = document.querySelector("#list-dosen")

        // mendengarkan setiap ketikan yang dimasukan user
        nama.addEventListener("keyup", evt => {
            if(nama.value.length > 0){
                dosen.classList.remove("remove")
            }else{
                dosen.classList.add("remove")
            }
        })
        

        // manghandle ketika user memilih dosen kemudian set input value sesuai dengan yang dipilih user
        const value = document.querySelectorAll("#nama-dosen")

        for(let i = 0; i < value.length; i++){
            value[i].addEventListener("click", () => {
                nama.value = value[i].textContent
                dosen.classList.add("remove")
            })
        }
    }
}

class Activity {
    /**
     * Membaca file pdf dan menampilkannya pada tag <canvas>
     * @param {String} source -> path menuju file pdf
     * @param {*} container_class -> container untuk menyimpan data tag canvas
     */
    LoadPdf(source, container_class){

        const data = pdfjsLib.getDocument(source)

        data.promise.then(pdf => {

            // mengambil halaman pdf satu per satu
            // kemudian menjadikan halammnya sebagai tag canvas 2d
            // append ke container_class supaya semua halaman pdf ditampilkan
            this.chainPdf(pdf, container_class)
        })
    }

    /**
     * Menampilkan halaman pdf satu per satu
     * mengubah perhalaman pdf menjadi elemen canvas 2d
     * append elemen canvas ke container reader pdf
     * @param {*} pdf -> object dari pdfjsLib
     * @param {*} container_class -> container untuk menyimpan data tag canvas
     */
    chainPdf(pdf, container_class){

        // mengambil jumlah halaman pdf
        const numPages = pdf.numPages;

        // menampilkan seluruh halaman pdf
        for(let i = 1; i <= numPages; i++){
            pdf.getPage(i).then(page => {

                // pengaturan tampilan
                var scale = 1.3;
                var viewport = page.getViewport({ scale: scale, });

                // Support HiDPI-screens.
                var outputScale = window.devicePixelRatio || 1;

                var viewer = document.querySelector(container_class)

                var canvas = document.createElement("canvas")
                var context = canvas.getContext("2d");

                viewer.appendChild(canvas)

                canvas.width = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);
                canvas.style.width = Math.floor(viewport.width) + "px";
                canvas.style.height =  Math.floor(viewport.height) + "px";

                var transform = outputScale !== 1
                ? [outputScale, 0, 0, outputScale, 0, 0]
                : null;

                // setting untuk merender halaman
                var renderContext = {
                    canvasContext: context,
                    transform: transform,
                    viewport: viewport
                };

                // merender halaman
                page.render(renderContext);
            })
        }
    }
}