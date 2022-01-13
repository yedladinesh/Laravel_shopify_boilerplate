import React, { useEffect, useState } from "react";


const Dashboard = () => {
    useEffect(() => {
    //getAffiliateDashboard();
  }, []);

//   const getAffiliateDashboard = async () => {
//     try {
//       const config = {
//         headers: {
//           Authorization: Cookies.get("token"),
//         },
//       };
//       setAffiliateLoader(true);
//       const {
//         data: { data, status },
//       } = await axios.post(GET_AFFILIATE_DASHBOARD, null, config);
//       if (status == 200) {
//         setAffiliate(data);
//         setAffiliateLoader(false);
//       }
//     } catch (error) {
//       setAffiliateLoader(false);
//       //console.log(error);
//     }
//   };

  return (
    <>
        <h1>React Dashboard</h1>

    </>
  );
};

export default Dashboard;
