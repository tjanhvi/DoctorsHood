import React from 'react';
import Navbar from './components/Navbar';
import Login from './auth/Login';
import Signup from './auth/Signup';
import Home from './Pages/Home';
import ConsultNow from './Pages/ConsultNow';
import MedicineReminder from './Pages/MedicineReminder';
import Profile from './Pages/Profile';
import VirtualDoctor from './Pages/VirtualDoctor';
import {Route, Routes} from 'react-router';
import Basebar from './components/Basebar';
import Result from './Pages/Result';
const Appmain = () => {
  return(
    <div>
      <Navbar />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/virtual-doctor" element ={<VirtualDoctor/>}/>
        <Route path="/consult-now" element ={<ConsultNow/>}/>
        <Route path="/medicine-reminder" element ={<MedicineReminder/>}/>
        <Route path="/login" element ={<Login/>}/>
        <Route path="/signup" element ={<Signup/>}/>
        <Route path="/profile" element ={<Profile/>}/>
        <Route path="/result" element ={<Result/>}/>
      </Routes>
      <Basebar />
    </div>
  )
};

export default Appmain;