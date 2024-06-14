document.addEventListener('DOMContentLoaded', function() {
    const modalDialog = document.querySelector('.modal-dialog');
    const modalHeader = document.querySelector('.modal-header');

    let isDragging = false;
    let startX, startY, initialX, initialY;

    modalHeader.addEventListener('mousedown', function(e) {
        isDragging = true;
        startX = e.clientX;
        startY = e.clientY;
        initialX = modalDialog.offsetLeft;
        initialY = modalDialog.offsetTop;
        modalHeader.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', function(e) {
        if (isDragging) {
            const currentX = e.clientX;
            const currentY = e.clientY;
            const dx = currentX - startX;
            const dy = currentY - startY;
            modalDialog.style.left = `${initialX + dx}px`;
            modalDialog.style.top = `${initialY + dy}px`;
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging = false;
        modalHeader.style.cursor = 'grab';
    });
});
