import React from 'react';
import Rrofile from '../Assets/Images/profile.jpg';
import CheckBox from '../components/CheckBox';
const CreateUserProfile = () => {
  return(
    <div className='profile-div'>
      <div className='child-div'>
        <div>
          <h1>Create Your Profile</h1>
        </div>
        <div className='sm:flex sm:flex-row '>
          <div className='sm:basis-1/5 img-parent'>
            <img src={Rrofile} alt='profile' className='profile-img'/>
          </div>
          <div className='sm:basis-4/5 img-parent1'>
            <div className='sm:pt-4 sm:pl-4 sm:flex sm:flex-row'>
              <div className='sm:basis-1/2'>
              <label htmlFor="first-name" className='sm:w-32'>
                First Name
              </label>
              <input type="text" id="first-name" placeholder="Enter your First Name" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
              <div className='sm:basis-1/2'>
              <label htmlFor="last-name" className='sm:w-32'>
                Last Name
              </label>
              <input type="text" id="last-name" placeholder="Enter your Last Name" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
            </div>
          </div>
        </div>
        <div className='gender sm:flex sm:flex-row'>
          <div className='basis-1/5'></div>
          <div className='basis-4/5 sm:flex sm:flex-row gender1'>
          <div className='basis-1/5 gender-div1 sm:pl-4'>
          <p>Gender</p>
          </div>
          <div className="flex items-center gap-8 gender-div">
            <CheckBox gender="Male"/>
            <CheckBox gender="Female"/>
            <CheckBox gender="Other"/>
          </div>
        </div>
        </div>
        <div className='sm:flex sm:flex-row'>
          <div className='basis-1/5 img-parent'>
          </div>
          <div className='basis-4/5 img-parent1'>
            <div className='sm:pt-4 sm:pl-4 sm:flex sm:flex-row'>
              <div className='sm:basis-1/2'>
              <label htmlFor="age" className='sm:w-32'>
                Age
              </label>
              <input type="number" id="age" placeholder="Enter your Age" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
              <div className='sm:basis-1/2'>
              <label htmlFor="blood-group" className='sm:w-32'>
                Blood Group
              </label>
              <input type="text" id="bload-group" placeholder="Enter your Bload Group" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
            </div>
          </div>
        </div>
        <div className='sm:flex sm:flex-row'>
          <div className='basis-1/5 img-parent'>
          </div>
          <div className='basis-4/5 img-parent1'>
            <div className='sm:pt-4 sm:pl-4 sm:flex sm:flex-row'>
              <div className='sm:basis-1/2'>
              <label htmlFor="height" className='sm:w-32'>
                Height (cm)
              </label>
              <input type="text" id="height" placeholder="Enter your Height in cm" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
              <div className='sm:basis-1/2'>
              <label htmlFor="weight" className='sm:w-32'>
                 Weight (kg)
              </label>
              <input type="text" id="weight" placeholder="Enter your Weight in kg" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
            </div>
          </div>
        </div>
        <div className='sm:flex sm:flex-row'>
          <div className='basis-1/5 img-parent'>
          </div>
          <div className='basis-4/5 img-parent1'>
            <div className='sm:basis-1/2'>
            <div className='sm:pt-4 sm:pl-4 sm:flex sm:flex-row'>
              <div className='sm:basis-1/2'>
              <label htmlFor="state" className='sm:w-32'>
                State
              </label>
              <select name="state" id="state" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'>
                <option value="" disabled>Select your State</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep </option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>
              </div>
              <div className='sm:basis-1/2'>
              <label htmlFor="city" className='sm:w-32'>
                 City
              </label>
              <input type="text" id="city" placeholder="Enter your City" className='border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:w-56'/>
              </div>
            </div>
          </div>
        </div>
        <div className='sm:flex sm:flex-row'>
          <div className='basis-1/5 img-parent'></div>
          <div className='basis-4/5 img-parent1 dec'>
            <div className="sm:flex sm:flex-row">
              <input type="checkbox" name="declaration" id="declaration" className='dec-c'/>
              <p className='dec-p'>I hereby declare that I am lawfully authorized to provide the abbove information on behalf of the owner of the information</p>
            </div>
            <div className='dec-btn'>
              <button className='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full'>
              Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  );
};

export default CreateUserProfile;
