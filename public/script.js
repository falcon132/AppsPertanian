document.addEventListener("DOMContentLoaded", function (event) {
    function addEventListenerBibit() {
        const tenagaEls = document.querySelectorAll('.bibit');
        let count = tenagaEls.length +1
        tenagaEls.forEach((el) => {
            const closeBtn = el.querySelector('.btn-danger');
            const addBtn = el.querySelector('.btn-primary');
            const row = `  
                <tr class="bibit" id="bibit-${count}">
                    <td scope="row">
                        <button type="button" class="btn btn-danger">X</button>
                        <button type="button" class="btn btn-primary">+</button>
                    </td>
                    <td><input name="bibit_nama[]" type="text" class="form-control"></td>
                    <td><input name="bibit_jumlah[]" type="text" class="form-control"></td>
                    <td><input name="bibit_harga[]" type="text" class="form-control"></td>
                    <td><input name="bibit_total[]" type="text" class="form-control" disabled></td>
                </tr>
            `;
            count = count+1

            const removeBtnCallback = (e) => {
                e.preventDefault()
                const tenagaElsCheck = document.querySelectorAll('.bibit');
                if (tenagaElsCheck.length > 1) {
                    el.remove()
                }
            }

            closeBtn.addEventListener('click', removeBtnCallback)
            const addBtnCallback = (e) => {
                e.preventDefault();
                el.insertAdjacentHTML('afterend', row);
                const tenagaElsCheck = document.querySelectorAll('.bibit');
                tenagaElsCheck.forEach((i) => {
                    const btnRemove = i.querySelector('.btn-primary');
                    const addBtn = i.querySelector('.btn-primary');
                    btnRemove.removeEventListener('click', removeBtnCallback)
                    addBtn.removeEventListener('click', addBtnCallback)
                })
                addEventListenerTenaga()
            }
            addBtn.addEventListener('click', addBtnCallback)
        });
    }
    addEventListenerBibit()

    function addEventListenerTenaga() {
        const tenagaEls = document.querySelectorAll('.tenaga');
        let count = tenagaEls.length +1
        tenagaEls.forEach((el) => {
            const closeBtn = el.querySelector('.btn-danger');
            const addBtn = el.querySelector('.btn-primary');
            const row = `  
                <tr class="tenaga" id="tenaga-${count}">
                    <td scope="row">
                        <button type="button" class="btn btn-danger">X</button>
                        <button type="button" class="btn btn-primary">+</button>
                    </td>
                    <td><input name="tenaga_nama[]" type="text" class="form-control"></td>
                    <td><input name="tenaga_jumlah[]" type="text" class="form-control"></td>
                    <td><input name="tenaga_harga[]" type="text" class="form-control"></td>
                    <td><input name="tenaga_total[]" type="text" class="form-control" disabled></td>
                </tr>
            `;
            count = count+1

            const removeBtnCallback = (e) => {
                e.preventDefault()
                const tenagaElsCheck = document.querySelectorAll('.tenaga');
                if (tenagaElsCheck.length > 1) {
                    el.remove()
                }
            }

            closeBtn.addEventListener('click', removeBtnCallback)
            const addBtnCallback = (e) => {
                e.preventDefault();
                el.insertAdjacentHTML('afterend', row);
                const tenagaElsCheck = document.querySelectorAll('.tenaga');
                tenagaElsCheck.forEach((i) => {
                    const btnRemove = i.querySelector('.btn-primary');
                    const addBtn = i.querySelector('.btn-primary');
                    btnRemove.removeEventListener('click', removeBtnCallback)
                    addBtn.removeEventListener('click', addBtnCallback)
                })
                addEventListenerTenaga()
            }
            addBtn.addEventListener('click', addBtnCallback)
        });
    }
    addEventListenerTenaga()

    function addEventListenerAnorganik() {
        const anorganikEls = document.querySelectorAll('.anorganik');
        let count = anorganikEls.length +1
        anorganikEls.forEach((el) => {
            const closeBtn = el.querySelector('.btn-danger');
            const addBtn = el.querySelector('.btn-primary');
            const row = `  
                <tr class="anorganik" id="anorganik-${count}">
                    <td scope="row">
                        <button type="button" class="btn btn-danger">X</button>
                        <button type="button" class="btn btn-primary">+</button>
                    </td>
                    <td><input name="anorganik_nama[]" type="text" class="form-control"></td>
                    <td><input name="anorganik_jumlah[]" type="text" class="form-control"></td>
                    <td><input name="anorganik_harga[]" type="text" class="form-control"></td>
                    <td><input name="anorganik_total[]" type="text" class="form-control" disabled></td>
                </tr>
            `;
            count = count+1

            const removeBtnCallback = (e) => {
                e.preventDefault()
                const anorganikElsCheck = document.querySelectorAll('.anorganik');
                if (anorganikElsCheck.length > 1) {
                    el.remove()
                }
            }

            closeBtn.addEventListener('click', removeBtnCallback)
            const addBtnCallback = (e) => {
                e.preventDefault();
                el.insertAdjacentHTML('afterend', row);
                const anorganikElsCheck = document.querySelectorAll('.anorganik');
                anorganikElsCheck.forEach((i) => {
                    const btnRemove = i.querySelector('.btn-primary');
                    const addBtn = i.querySelector('.btn-primary');
                    btnRemove.removeEventListener('click', removeBtnCallback)
                    addBtn.removeEventListener('click', addBtnCallback)
                })
                addEventListenerAnorganik()
            }
            addBtn.addEventListener('click', addBtnCallback)
        });
    }
    addEventListenerAnorganik()

    function addEventListenerOrganik() {
        const organikEls = document.querySelectorAll('.organik');
        let count = organikEls.length +1
        organikEls.forEach((el) => {
            const closeBtn = el.querySelector('.btn-danger');
            const addBtn = el.querySelector('.btn-primary');
            const row = `  
                <tr class="organik" id="organik-${count}">
                    <td scope="row">
                        <button type="button" class="btn btn-danger">X</button>
                        <button type="button" class="btn btn-primary">+</button>
                    </td>
                    <td><input name="organik_nama[]" type="text" class="form-control"></td>
                    <td><input name="organik_jumlah[]" type="text" class="form-control"></td>
                    <td><input name="organik_harga[]" type="text" class="form-control"></td>
                    <td><input name="organik_total[]" type="text" class="form-control" disabled></td>
                </tr>
            `;
            count = count+1

            const removeBtnCallback = (e) => {
                e.preventDefault()
                const organikElsCheck = document.querySelectorAll('.organik');
                if (organikElsCheck.length > 1) {
                    el.remove()
                }
            }

            closeBtn.addEventListener('click', removeBtnCallback)
            const addBtnCallback = (e) => {
                e.preventDefault();
                el.insertAdjacentHTML('afterend', row);
                const organikElsCheck = document.querySelectorAll('.organik');
                organikElsCheck.forEach((i) => {
                    const btnRemove = i.querySelector('.btn-primary');
                    const addBtn = i.querySelector('.btn-primary');
                    btnRemove.removeEventListener('click', removeBtnCallback)
                    addBtn.removeEventListener('click', addBtnCallback)
                })
                addEventListenerOrganik()
            }
            addBtn.addEventListener('click', addBtnCallback)
        });
    }
    addEventListenerOrganik()

    function addEventListenerPestisida() {
        const pestisidaEls = document.querySelectorAll('.pestisida');
        let count = pestisidaEls.length +1
        pestisidaEls.forEach((el) => {
            const closeBtn = el.querySelector('.btn-danger');
            const addBtn = el.querySelector('.btn-primary');
            const row = `  
                <tr class="pestisida" id="pestisida-${count}">
                    <td scope="row">
                        <button type="button" class="btn btn-danger">X</button>
                        <button type="button" class="btn btn-primary">+</button>
                    </td>
                    <td><input name="pestisida_nama[]" type="text" class="form-control"></td>
                    <td><input name="pestisida_jumlah[]" type="text" class="form-control"></td>
                    <td><input name="pestisida_harga[]" type="text" class="form-control"></td>
                    <td><input name="pestisida_total[]" type="text" class="form-control" disabled></td>
                </tr>
            `;
            count = count+1

            const removeBtnCallback = (e) => {
                e.preventDefault()
                const pestisidaElsCheck = document.querySelectorAll('.pestisida');
                if (pestisidaElsCheck.length > 1) {
                    el.remove()
                }
            }

            closeBtn.addEventListener('click', removeBtnCallback)
            const addBtnCallback = (e) => {
                e.preventDefault();
                el.insertAdjacentHTML('afterend', row);
                const pestisidaElsCheck = document.querySelectorAll('.pestisida');
                pestisidaElsCheck.forEach((i) => {
                    const btnRemove = i.querySelector('.btn-primary');
                    const addBtn = i.querySelector('.btn-primary');
                    btnRemove.removeEventListener('click', removeBtnCallback)
                    addBtn.removeEventListener('click', addBtnCallback)
                })
                addEventListenerPestisida()
            }
            addBtn.addEventListener('click', addBtnCallback)
        });
    }
    addEventListenerPestisida()
});