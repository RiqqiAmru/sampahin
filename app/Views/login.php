<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-hijau-satu">
  <?php if (empty($error)) {
    $error = '';
  } ?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card bg-hijau-satu">
          <div class="card-body">
            <div class="text-center my-4">
              <img src="public/img/logo.png" alt="logo sampahin ">
            </div>
            <form action="<?= base_url('login/valid') ?>" method="post">
              <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" class="form-control <?= ($error) ? 'is-invalid' : 'valid'; ?> bg-hijau-dua" id="username" required name="username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control <?= ($error) ? 'is-invalid' : 'valid'; ?> bg-hijau-dua" id="password" required name="pass">
                <div class="invalid-feedback" id="passwordFeddback">
                  <?= $error ?>
                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn bg-hijau-tiga text-white"><b>Log in</b></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center " style="align-self: auto;">
      <svg width="58" height="12" viewBox="0 0 58 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.9257 8.05788C16.9257 8.52605 16.7482 8.88713 16.3932 9.14111C16.0413 9.39509 15.5471 9.52208 14.9107 9.52208C14.2926 9.52208 13.8152 9.4211 13.4786 9.21914C13.1451 9.01412 12.9278 8.69588 12.8268 8.26443L13.5566 8.12214C13.627 8.38835 13.7724 8.58419 13.9927 8.70965C14.213 8.83205 14.519 8.89325 14.9107 8.89325C15.3299 8.89325 15.6359 8.82899 15.8287 8.70047C16.0245 8.57195 16.1224 8.37917 16.1224 8.12214C16.1224 7.9263 16.0551 7.76718 15.9205 7.64478C15.7858 7.52238 15.5686 7.4214 15.2687 7.34184C14.9137 7.24698 14.6307 7.16895 14.4195 7.10775C14.2115 7.04655 14.0508 6.99453 13.9376 6.95169C13.8244 6.90579 13.7341 6.86295 13.6668 6.82317C13.4648 6.70689 13.3072 6.5646 13.194 6.3963C13.0808 6.228 13.0242 6.02145 13.0242 5.77665C13.0242 5.32377 13.1848 4.97952 13.5061 4.7439C13.8305 4.50522 14.3017 4.38588 14.9199 4.38588C15.4676 4.38588 15.9021 4.48227 16.2234 4.67505C16.5478 4.86783 16.7528 5.17689 16.8385 5.60223L16.0949 5.69403C16.049 5.47371 15.9251 5.30541 15.7231 5.18913C15.5242 5.06979 15.2564 5.01012 14.9199 5.01012C14.5465 5.01012 14.2711 5.06673 14.0937 5.17995C13.9162 5.29317 13.8274 5.46453 13.8274 5.69403C13.8274 5.86233 13.8779 6.00156 13.9789 6.11172C14.0799 6.21882 14.2727 6.30756 14.5572 6.37794C14.9397 6.46974 15.3039 6.57072 15.6497 6.68088C15.9954 6.78798 16.2433 6.89508 16.3932 7.00218C16.5677 7.12764 16.6992 7.27605 16.788 7.44741C16.8798 7.61571 16.9257 7.8192 16.9257 8.05788ZM19.1656 9.52208C18.6668 9.52208 18.292 9.3905 18.041 9.12734C17.7901 8.86418 17.6647 8.5031 17.6647 8.04411C17.6647 7.53003 17.833 7.13529 18.1696 6.85989C18.5092 6.58449 19.0554 6.43761 19.8082 6.41925L20.9236 6.40089V6.13008C20.9236 5.72616 20.8379 5.43699 20.6665 5.26257C20.4952 5.08815 20.2259 5.00094 19.8587 5.00094C19.4884 5.00094 19.2191 5.06367 19.0508 5.18913C18.8825 5.31459 18.7816 5.51502 18.7479 5.79042L17.885 5.71239C18.0257 4.81887 18.6898 4.37211 19.877 4.37211C20.5013 4.37211 20.971 4.51593 21.2862 4.80357C21.6013 5.08815 21.7589 5.50125 21.7589 6.04287V8.18181C21.7589 8.4266 21.7911 8.61173 21.8553 8.73719C21.9196 8.85959 22.042 8.92079 22.2225 8.92079C22.3082 8.92079 22.3985 8.91008 22.4933 8.88866V9.40274C22.3893 9.42722 22.2837 9.44558 22.1766 9.45782C22.0695 9.47006 21.9624 9.47618 21.8553 9.47618C21.5493 9.47618 21.3259 9.39662 21.1852 9.2375C21.0475 9.07532 20.9695 8.82287 20.9511 8.48015H20.9236C20.7124 8.85959 20.4661 9.12887 20.1846 9.28799C19.9061 9.44405 19.5664 9.52208 19.1656 9.52208ZM20.9236 6.97923L20.0193 6.99759C19.6338 7.00065 19.34 7.04043 19.1381 7.11693C18.9361 7.19037 18.7816 7.30359 18.6745 7.45659C18.5674 7.60959 18.5138 7.81002 18.5138 8.05788C18.5138 8.32716 18.5857 8.53523 18.7295 8.68211C18.8764 8.82899 19.0845 8.90243 19.3538 8.90243C19.6598 8.90243 19.9291 8.83358 20.1616 8.69588C20.3972 8.55818 20.5824 8.36999 20.717 8.13132C20.8547 7.88958 20.9236 7.64172 20.9236 7.38774V6.97923ZM23.9713 6.55236V9.43028H23.1497V5.5242C23.1497 5.2335 23.1466 5.00094 23.1405 4.82652C23.1375 4.64904 23.1313 4.52817 23.1222 4.46391H23.9025C23.9086 4.53123 23.9147 4.61385 23.9208 4.71177C23.9269 4.80969 23.9315 4.9122 23.9346 5.0193C23.9376 5.12334 23.9392 5.22126 23.9392 5.31306H23.9529C24.1304 4.96116 24.3339 4.71636 24.5634 4.57866C24.7929 4.44096 25.0729 4.37211 25.4034 4.37211C25.7798 4.37211 26.0766 4.44708 26.2938 4.59702C26.5142 4.74696 26.6672 4.98564 26.7528 5.31306H26.7666C26.938 4.97952 27.1445 4.73931 27.3863 4.59243C27.6311 4.44555 27.9264 4.37211 28.2721 4.37211C28.774 4.37211 29.1381 4.50828 29.3645 4.78062C29.594 5.05296 29.7088 5.49972 29.7088 6.1209V9.43028H28.8918V6.28155C28.8918 5.80113 28.826 5.46912 28.6944 5.28552C28.5628 5.10192 28.3257 5.01012 27.983 5.01012C27.6219 5.01012 27.3404 5.14476 27.1384 5.41404C26.9395 5.68026 26.8401 6.0597 26.8401 6.55236V9.43028H26.023V6.28155C26.023 5.80113 25.9572 5.46912 25.8257 5.28552C25.6941 5.10192 25.4569 5.01012 25.1142 5.01012C24.7623 5.01012 24.4839 5.14476 24.2788 5.41404C24.0738 5.68332 23.9713 6.06276 23.9713 6.55236ZM35.1617 6.92415C35.1617 7.79013 35.0087 8.44037 34.7027 8.87489C34.3998 9.30635 33.9438 9.52208 33.3349 9.52208C32.5699 9.52208 32.0558 9.23444 31.7927 8.65916H31.7697C31.7819 8.68058 31.7881 8.94068 31.7881 9.43946V11.381H30.9619V5.4783C30.9619 5.22432 30.9588 5.01318 30.9527 4.84488C30.9496 4.67352 30.9435 4.54653 30.9343 4.46391H31.733C31.736 4.47615 31.7406 4.53582 31.7468 4.64292C31.7559 4.75002 31.7636 4.8663 31.7697 4.99176C31.7758 5.11416 31.7789 5.20443 31.7789 5.26257H31.7972C31.9441 4.95657 32.1384 4.73319 32.3802 4.59243C32.6219 4.44861 32.9401 4.3767 33.3349 4.3767C33.9469 4.3767 34.4044 4.58172 34.7073 4.99176C35.0102 5.4018 35.1617 6.04593 35.1617 6.92415ZM34.2942 6.94251C34.2942 6.25095 34.2009 5.75676 34.0142 5.45994C33.8275 5.16312 33.5307 5.01471 33.1237 5.01471C32.6709 5.01471 32.3343 5.1723 32.114 5.48748C31.8967 5.7996 31.7881 6.30603 31.7881 7.00677C31.7881 7.65855 31.8921 8.13897 32.1002 8.44802C32.3083 8.75708 32.6464 8.91161 33.1146 8.91161C33.5246 8.91161 33.823 8.76167 34.0096 8.46179C34.1993 8.15886 34.2942 7.65243 34.2942 6.94251ZM37.4613 9.52208C36.9625 9.52208 36.5877 9.3905 36.3367 9.12734C36.0858 8.86418 35.9604 8.5031 35.9604 8.04411C35.9604 7.53003 36.1287 7.13529 36.4653 6.85989C36.8049 6.58449 37.3511 6.43761 38.1039 6.41925L39.2193 6.40089V6.13008C39.2193 5.72616 39.1336 5.43699 38.9622 5.26257C38.7909 5.08815 38.5216 5.00094 38.1544 5.00094C37.7841 5.00094 37.5148 5.06367 37.3465 5.18913C37.1782 5.31459 37.0773 5.51502 37.0436 5.79042L36.1807 5.71239C36.3214 4.81887 36.9855 4.37211 38.1727 4.37211C38.797 4.37211 39.2667 4.51593 39.5819 4.80357C39.897 5.08815 40.0546 5.50125 40.0546 6.04287V8.18181C40.0546 8.4266 40.0868 8.61173 40.151 8.73719C40.2153 8.85959 40.3377 8.92079 40.5182 8.92079C40.6039 8.92079 40.6942 8.91008 40.789 8.88866V9.40274C40.685 9.42722 40.5794 9.44558 40.4723 9.45782C40.3652 9.47006 40.2581 9.47618 40.151 9.47618C39.845 9.47618 39.6216 9.39662 39.4809 9.2375C39.3432 9.07532 39.2652 8.82287 39.2468 8.48015H39.2193C39.0081 8.85959 38.7618 9.12887 38.4803 9.28799C38.2018 9.44405 37.8622 9.52208 37.4613 9.52208ZM39.2193 6.97923L38.315 6.99759C37.9295 7.00065 37.6357 7.04043 37.4338 7.11693C37.2318 7.19037 37.0773 7.30359 36.9702 7.45659C36.8631 7.60959 36.8095 7.81002 36.8095 8.05788C36.8095 8.32716 36.8814 8.53523 37.0252 8.68211C37.1721 8.82899 37.3802 8.90243 37.6495 8.90243C37.9555 8.90243 38.2248 8.83358 38.4573 8.69588C38.6929 8.55818 38.8781 8.36999 39.0127 8.13132C39.1504 7.88958 39.2193 7.64172 39.2193 7.38774V6.97923ZM42.2486 5.31306C42.4261 4.9887 42.6388 4.75155 42.8867 4.60161C43.1376 4.44861 43.4543 4.37211 43.8368 4.37211C44.3753 4.37211 44.7716 4.51287 45.0256 4.79439C45.2826 5.07285 45.4112 5.51502 45.4112 6.1209V9.43028H44.5804V6.28155C44.5804 5.83173 44.5008 5.50737 44.3417 5.30847C44.1856 5.10957 43.924 5.01012 43.5568 5.01012C43.1682 5.01012 42.8561 5.14476 42.6204 5.41404C42.3879 5.68332 42.2716 6.04593 42.2716 6.50187V9.43028H41.4454V2.61874H42.2716V4.39047C42.2716 4.51287 42.2685 4.64292 42.2624 4.78062C42.2563 4.91526 42.2502 5.03307 42.2441 5.13405C42.241 5.23197 42.2379 5.29164 42.2349 5.31306H42.2486ZM47.4812 2.61874V3.40822H46.655V2.61874H47.4812ZM47.4812 4.46391V9.43028H46.655V4.46391H47.4812ZM49.5972 6.55236V9.43028H48.771V5.5242C48.771 5.2335 48.768 5.00094 48.7618 4.82652C48.7588 4.64904 48.7527 4.52817 48.7435 4.46391H49.5238C49.5299 4.52205 49.5345 4.59549 49.5376 4.68423C49.5437 4.77297 49.5483 4.87089 49.5513 4.97799C49.5544 5.08509 49.5574 5.19678 49.5605 5.31306H49.5743C49.764 4.97034 49.9828 4.7286 50.2306 4.58784C50.4816 4.44402 50.7922 4.37211 51.1624 4.37211C51.7071 4.37211 52.1049 4.51134 52.3558 4.7898C52.6098 5.06826 52.7368 5.51196 52.7368 6.1209V9.43028H51.906V6.28155C51.906 5.80725 51.8295 5.47677 51.6765 5.29011C51.5235 5.10345 51.2588 5.01012 50.8824 5.01012C50.4846 5.01012 50.171 5.14629 49.9415 5.41863C49.712 5.69097 49.5972 6.06888 49.5972 6.55236Z" fill="white" />
        <path d="M1.07237 5.23384C1.07237 5.23384 1.07237 4.64471 1.07237 8.02287C1.07237 11.401 10.0171 11.401 10.0171 8.02287C10.0171 4.64471 10.0171 3.80017 10.0171 3.80017C10.0171 3.80017 1.91691 4.48763 1.07237 3.22082C0.227831 1.954 6.98419 1.53174 10.3623 1.53174" stroke="white" stroke-width="1.68908" />
      </svg>

    </div>
  </div>

</body>

</html>