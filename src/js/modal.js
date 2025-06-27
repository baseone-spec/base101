document.addEventListener("DOMContentLoaded", function() {
            const openButtons = document.querySelectorAll('.openModalBtn');
            const closeButtons = document.querySelectorAll('.closeModalBtn');

            openButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const modalId = btn.getAttribute('data-modal-id');
                    const modal = document.getElementById(modalId);
                    if (modal) modal.classList.remove('hidden');
                });
            });

            closeButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    // find the closest modal ancestor
                    const modal = btn.closest('.modal');
                    if (modal) modal.classList.add('hidden');
                });
            });
        });