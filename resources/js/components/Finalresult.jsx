import React, { useState } from "react";
import ListItem from './ListItem';

const Finalresult =() =>{
  const details = [{
    id:1,
    title: 'Dr. John Doe',
    yrs: 10,
    cast: 'Tim Robbins, Morgan Freeman',
    online: true,
    onsite: false
  },{
    id:2,
    title: 'Dr. Janhvi Tiwari',
    yrs: 8,
    cast: 'Robert De Niro, Al Pacino',
    online: true,
    onsite: true
  },{
    id:3,
    title: 'Dr. Ranveer Singh',
    yrs: 4,
    cast: 'Tim Robbins, Morgan Freeman',
    online: false,
    onsite: true
  },{
    id:4,
    title: 'Dr. Harshit Singh',
    yrs: 3,
    cast: 'Morgan Freeman, Bob Gunton',
    online: true,
    onsite: true
  },{
    id:5,
    title: 'Dr. Manish Singh',
    yrs: 7,
    cast: 'Natalie Portman, Morgan Freeman',
    online: false,
    onsite: true
  },{
    id:6,
    title: 'Dr. Tushar Singh',
    yrs: 5,
    cast: 'Paul Newman, Morgan Freeman',
    online: true,
    onsite: false
  },{
    id:7,
    title: 'Dr. Darshan Singh',
    yrs: 9,
    cast: 'Brad Pitt, Morgan Freeman',
    online: true,
    onsite: true
  }];
  const [onLine, setOnLine] = useState(true);
  const [onSite, setOnSite] = useState(false);
  function updateOnline(){
    setOnLine(true);
    setOnSite(false);
  }
  function updateOnsite(){
    setOnSite(true);
    setOnLine(false);
  }
  return (
    <div>
    <div className="center-00">
        <div className="flex items-center justify-center gap-4 mt-12 -mb-15">
            <button type="button" className={onLine ? "py-2 px-10  bg-teal-600 hover:bg-teal-900 focus:ring-teal-600 focus:ring-offset-teal-600 text-white w-65 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg mt-10 ml-10" : "py-2 px-10 bg-white hover:bg-gray-100 focus:ring-teal-600 focus:ring-offset-teal-600 text-teal-600 text-Blue w-65 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg mt-10 ml-10"} onClick={updateOnline} >Online Booking                     
            </button>
            <button type="button" className={onSite ? "py-2 px-10  bg-teal-600  focus:ring-teal-600 focus:ring-offset-indigo-200 text-white w-65 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg mt-10 mr-10" : "py-2 px-10 bg-white hover:bg-gray-100 focus:ring-teal-600 focus:ring-offset-teal-600 text-teal-600 text-Blue w-65 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg mt-10 mr-10"} onClick={updateOnsite}>Onsite Booking
            </button>
        </div>
    </div>
    <div>
        {details.map((props) => (
          <ListItem key={props.id} title={props.title} yrs ={props.yrs} cast = {props.cast} online ={props.online} onsite ={props.onsite} checkOnline = {onLine} checkOnsite={onSite}/>
        ))}
    </div>
    </div>
  );
}

export default Finalresult;
