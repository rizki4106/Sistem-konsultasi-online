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