<button id="createProductButton"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
        type="button" data-drawer-target="drawer-create-product-default"
        data-drawer-show="drawer-create-product-default"
        aria-controls="drawer-create-product-default" data-drawer-placement="right">
    Add new product
</button>
<div
    class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-40">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div
        class="modal-container bg-gray-800 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Add New Product</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                         width="18" height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <div class="">
                <form class="space-y-4 md:space-y-6" method="POST" action="/products">
                    @csrf
                    <x-forms.input label="Title" name="title"
                                   placeholder="Shirt" required/>

                    <x-forms.input label="Price" name="title"
                                   placeholder="20000" required/>

                    <x-forms.textarea label="Description" name="description"/>

                    <x-forms.image name="product_images" label="Product Images" />

                    <button type="submit" class="p-2 bg-primary rounded-md text-white">
                        Submit
                    </button>
                </form>
            </div>

            <div class="flex justify-end pt-2">
                <button
                    class="modal-close px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
                    Close
                </button>
                <button
                    class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let openmodal = document.getElementById('createProductButton')
    let modal = document.querySelector('.modal')
    let closemodal = document.querySelectorAll('.modal-close')

    openmodal.addEventListener('click', function (event) {
        event.preventDefault()
        modal.classList.remove('opacity-0')
        modal.classList.remove('pointer-events-none')
        document.body.classList.add('modal-active')
    })

    closemodal.forEach(function (elem) {
        elem.addEventListener('click', function () {
            modal.classList.add('opacity-0')
            modal.classList.add('pointer-events-none')
            document.body.classList.remove('modal-active')
        })
    })

    modal.querySelector('.modal-overlay').addEventListener('click', function () {
        modal.classList.add('opacity-0')
        modal.classList.add('pointer-events-none')
        document.body.classList.remove('modal-active')
    })
</script>
