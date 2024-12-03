import React from 'react';
import OrderSystem from './components/OrderSystem';
import MaterialManagement from './components/MaterialManagement';
import HolzlistenSystem from './components/HolzlistenSystem';

const App = () => {
  return (
    <div className="container mx-auto p-4">
      <h1 className="text-2xl font-bold mb-4">Holzlisten System</h1>
      <div className="space-y-6">
        <OrderSystem />
        <MaterialManagement />
        <HolzlistenSystem />
      </div>
    </div>
  );
};

export default App;
