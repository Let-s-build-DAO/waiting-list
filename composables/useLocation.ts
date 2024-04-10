import axios from "axios";
import type { UserIP } from "~/typings/global";

const useUserLocation = () => {
  const fetchUserLocation = async (): Promise<UserIP> => {
    try {
      const locationResponse = await axios.get<UserIP>("https://freeipapi.com/api/json");

      return locationResponse.data; // Return location data only
    } catch (error: any) {
      throw new Error("Failed to fetch user location. Please try again.");
    }
  };

  return {fetchUserLocation };
};

export default useUserLocation;