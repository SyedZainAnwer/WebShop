export const getTotalPrice = (priceWOTax) => {
    const taxRate = 0.19;

    return priceWOTax * (1 + taxRate);
}