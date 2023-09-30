const generatePagination = (currentPage, totalPages) => {
    const htmlTemplate = `<ul>$paginationItems </ul>`;

    const emptyPaginationItemsHTML = `
    <li><a class="prev-next previous prev" data-dt-idx="0" atr="Previous"><i class="ion-ios-arrow-left"></i> Prev</a></li>
    <li><a class="prev-next next disabled" data-dt-idx="1" atr="Next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>`;
    if (totalPages == 0) {
        return htmlTemplate.replaceAll('$paginationItems', emptyPaginationItemsHTML);
    } 
    let leftPart = [];
    let rightPart = [];
    let prevDisabled = currentPage == 1;
    let nextDisabled = currentPage == totalPages;

    if (currentPage >= 5 && currentPage <= totalPages - 4) {
        leftPart = [1, '...', currentPage - 1];
        rightPart = [currentPage + 1, '...', totalPages];
    }
    else if (currentPage >= 5) {
        leftPart = [1, '...', currentPage - 1];
        for (let i = currentPage + 1; i <= totalPages; ++i) {
            rightPart.push(i);
        }
    }
    else if (currentPage <= totalPages - 4) {
        for (let i = 1; i <= currentPage - 1; ++i) {
            leftPart.push(i);
        }
        rightPart = [currentPage + 1, '...', totalPages];
    }
    else {
        for (let i = 1; i <= currentPage - 1; ++i) {
            leftPart.push(i);
        }
        for (let i = currentPage + 1; i <= totalPages; ++i) {
            rightPart.push(i);
        }
    }

    let paginationItemsHTML = ``;
    let dataIndex = 0;
    paginationItemsHTML += `
        <li><a class="page-numbers previous ${prevDisabled ? 'disabled' : ''}" data-dt-idx="${dataIndex}" tabindex="0" atr="Previous"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a></li> `;
    dataIndex++;
    for (let pageNumber of leftPart) {
        paginationItemsHTML += `
            <li><a class="page-numbers  ${pageNumber == '...' ? 'disabled' : ''}" data-dt-idx="${dataIndex}" atr="${pageNumber}">${pageNumber}</a></li> `;
        dataIndex++;
    }
    paginationItemsHTML += `
        <li><a class="page-numbers active" data-dt-idx="${dataIndex}">${currentPage}</a>  `;
    dataIndex++;
    for (let pageNumber of rightPart) {
        paginationItemsHTML += `
            <li><a class="page-numbers ${pageNumber == '...' ? 'disabled' : ''}" data-dt-idx="${dataIndex}" atr="${pageNumber}">${pageNumber}</a></li>`;
        dataIndex++;
    }
    paginationItemsHTML += `
        <li><a class="page-numbers  next ${nextDisabled ? 'disabled' : ''}" data-dt-idx="${dataIndex}" atr="Next"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a></li> `;
    dataIndex++;

    // console.log(leftPart, rightPart);
    return htmlTemplate.replaceAll('$paginationItems', paginationItemsHTML);
};