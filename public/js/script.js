const deleteConfirmModal = document.querySelector(".confirmDeleteModal")
const confirmDeleteForm = document.querySelector(".confirmDeleteForm")
const modalButton = document.querySelector(".deleteAccount")
const closeModalButton = document.querySelector(".cancelDelete")


deleteConfirmModal.style.transform = "translateX(-100vw)"

// deleteConfirmModal.style.opacity = "0"p

modalButton.addEventListener("click", () => {
    confirmDeleteForm.style.zIndex = "1"
    deleteConfirmModal.style.transform = "translateX(0vw)"
    deleteConfirmModal.style.opacity = "1"
})

closeModalButton.addEventListener("click", () => {
    confirmDeleteForm.style.zIndex = "-1"
    deleteConfirmModal.style.transform = "translateX(-100vw)"
    deleteConfirmModal.style.opacity = "0"
})
