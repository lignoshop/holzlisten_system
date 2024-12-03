const API_URL = 'http://your-domain.com/api';

export const apiClient = {
    async getOrders() {
        const response = await fetch(`${API_URL}/orders`);
        return response.json();
    },

    async getMaterials() {
        const response = await fetch(`${API_URL}/materials`);
        return response.json();
    },

    async calculatePosition(data) {
        const response = await fetch(`${API_URL}/calculate`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });
        return response.json();
    }
};
