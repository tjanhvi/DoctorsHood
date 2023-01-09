import React from 'react';
import { Link } from 'react-router-dom';
const Basebar = () => {
  return(
    <div className='base-main'>
    <div className='w-2/4 align-center h-10 base drop-shadow-2xl rounded-lg'>
      <Link to="/" className='py-2 inline-block align-middle'>Home</Link>
      <Link to="/virtual-doctor" className='py-2 inline-block align-middle'>Virtual Doctor</Link>
      <Link to="/consult-now" className='py-2 inline-block align-middle'>Consult Now</Link>
      <Link to="/profile" className='py-2 inline-block align-middle'>Profile</Link>
    </div>
    </div>
  );
};

export default Basebar;
